class ListingsController < ApplicationController
  layout 'global'
  before_filter :authorize
  before_filter :categories_for_select, :only => [:new, :create, :edit]
  before_filter :locations_for_select, :only => [:new, :create, :edit]

  def show
    @listing = Listing.find(params[:id])
  end
  
  def your
    @listings = Listing.my_listing(current_user, params[:page])
  end

  def index
    @listings = Listing.get_all(params[:page])
  end
  
  def edit
    @listing = Listing.find(params[:id])
  end

  def update
    @listing = Listing.find(params[:id])
    @listing.update_attributes(params[:listing])
    flash[:notice]  = "Listing updated."
    redirect_to listings_path
  end

  def create
    @listing = Listing.new(params[:listing])
    begin
      default_user = Member.find_by_email("pwvillacorta@gmail.com")
      @listing.member_id = default_user.id
      @listing.status=1
      @listing.created_by = current_user.login
      @listing.save!

      page_code = CGI.escape(@listing.name.to_s + "-" + @listing.id.to_s)
      @listing.update_attribute(:page_code, page_code)
      flash[:notice] = "Business added successfully"
      redirect_to listings_path
    rescue Exception => e
      render :new
    end
  end

  def approve
    s = SubmittedBusiness.find(params[:id])
    redirect_to signups_listings_path if s.nil?
    if approve_new_listing(s, params[:t])
      s.update_attribute(:status, "accepted")
      render :text => "ok"
    else
      render :text => "no"
    end
  end
  
  def new
    @listing = Listing.new
  end
  
  def update_status_fordeletion
    members = CebuMember.find(:all)
    members.each do |member|
      if member.mem_reg_status.to_i == 1
        businesses = CebuBusiness.find(:all, :conditions => ["bus_mem_id=?", member.mem_id ] )
        businesses.each do |bus|
          puts bus.bus_id
          bus.connection.execute("Update cebu_business set status=1 where bus_id = #{bus.bus_id}")
        end
      end
    end
  end
  
  def www_fordeletion
    businesses = CebuBusiness.find(:all)
    businesses.each do |bus|
      www = bus.bus_website.gsub("http://", "")
      new_url = "http://" + www
      bus.connection.execute("Update cebu_business set bus_website='#{new_url}' where bus_id = #{bus.bus_id}")
    end
  end
  
  def signups_fordeletion
    @listings = SubmittedBusiness.find(:all, :conditions => "status='pending'", :order => "created_at DESC")
  end

  def newlisting_fordeletion
    @listing = SubmittedBusiness.find(params[:id])
  end
  
  private

  def approve_new_listing(s, type)
    default_user = Member.find_by_email("pwvillacorta@gmail.com")
    
    b = Listing.new
    b.name = s.name
    b.address = s.address
    b.location_id = s.location_id
    b.member_id = default_user.id
    b.category_id = s.category_id
    b.website = s.website
    b.email = s.email_address
    b.telno = s.telno
    b.mobile_no = s.mobileno
    b.fax_no = s.faxno
    b.description = s.description
    b.status = 1
    b.page_code = s.name.downcase.split(" ").join("-")
    b.created_at = s.created_at
    b.listing_type = (type == "p") ? "premium" : "basic"

    if b.save
      true
    else
      false
    end
  end

  def categories_for_select
    cats = Category.find(:all, :order => "name asc")
    @categories = []
    cats.each do |c|
      @categories << [c.name, c.id]
    end
  end

  def locations_for_select
    locations = Location.find(:all, :order => "name asc")
    @locations = []
    locations.each do |l|
      @locations << [l.name, l.id]
    end
  end

end
