class ProspectsController < ApplicationController
  layout 'global'
  before_filter :authorize
  before_filter :make_page_title

  def index
    @prospects = Prospect.find_paginated(params[:page])
  end
  
  def create
    begin
      p = Prospect.new(params[:prospect])
      p.save
      flash[:notice] = "Prospect created."
      redirect_to prospects_path
    rescue StandardError => error
      flash[:notie] = nil
      flash[:error] = error
    end
  end

  def update
    p = Prospect.find(params[:id])
    p.update_attributes(params[:prospect])
    p.save
    flash[:notice]  = "Prospect updated."
    redirect_to prospects_path
  end
  
  def edit
    @prospect_statuses = []
    @prospect = Prospect.find(params[:id])
    statuses = ProspectStatus.find(:all)
    statuses.each do |s|
      @prospect_statuses << [s.name.titleize, s.id]
    end
  end
  
  def destroy
    p = Prospect.find(params[:id])
    p.deleted_at = Time.now.to_date
    p.save
    flash[:notice] = "Prospect deleted."
    redirect_to prospects_path
  end

  def send_premium
    p = Prospect.find(params[:id])
    p.prospect_status_id = ProspectStatus.find_by_code("email_sent").id
    p.save
    Mailer.deliver_premium_proposal(p)
    flash[:notice] = "Successfully send a premium proposal email"
    redirect_to prospects_path
  end


  private
  
  def make_page_title
    @page_title = "Prospects Information"
  end
  
end