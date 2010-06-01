class AdvertisementsController < ApplicationController
  layout 'global'  
  def view
    ads = Ad.find(params[:id])
    views = AdsView.new
    views.ad_id = ads.id
    views.ipaddress = request.remote_ip
    views.hostname = request.host
    views.save
    redirect_to ads.redirect_to
  end

  def index
    @ads = Ad.find(:all)
  end

  def create
    puts params.inspect
    ads = Ad.new
    ads.name = params[:name]
    ads.image = params[:ad][:image]
    ads.save
    redirect_to advertisements_path
  end
  
end
