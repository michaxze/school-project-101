class AdvertisementsController < ApplicationController
  layout 'global'  

  before_filter :make_page_title
  before_filter :authorize, :only => [ :index, :create, :destroy, :edit, :update ]
  
  #this method does not check any authentication
  def view
    ads = Ad.find(params[:id])
    views = AdsView.new
    views.ad_id = ads.id
    views.ipaddress = request.remote_ip
    views.hostname = request.host
    views.save
    
    Ad.increment_counter(:total_views, ads.id)
    redirect_to ads.redirect_to
  end

  def views
    @views= AdsView.get_views(params[:page])
  end
  
  def update_views
    ads = Ad.find(:all)
    
    ads.each do |ad|
      ad.update_attribute(:total_views, ad.ads_views.length)
    end
    
    redirect_to advertisements_path
  end
  
  def index
    @ads = Ad.find(:all)
  end

  def create
    ads = Ad.new
    ads.name = params[:name]
    ads.redirect_to = params[:redirect_page]
    ads.save
    
    filename = ads.id.to_s + "-" +  params[:ad]['datafile'].original_filename
    ads.image = filename
    ads.save

    post = Ad.save_ads_image(ads, filename, params[:ad])
    redirect_to advertisements_path
  end

  def destroy
    ads = Ad.find(params[:id])
    ads.destroy
    redirect_to advertisements_path
  end
  
  def edit
    @ad = Ad.find(params[:id])
  end

  def update
    ad = Ad.find(params[:id])
    ad.name = params[:name]
    ad.redirect_to = params[:redirect_page]
    ad.save

    unless params[:ad].nil?
      filename = ad.id.to_s + "-" +  params[:ad]['datafile'].original_filename
      ad.image = filename
      ad.save
      Ad.save_ads_image(ad, filename, params[:ad])
    end

    redirect_to advertisements_path
  end

  private
  
  def make_page_title
    @page_title = "Advertisements"
  end

end
