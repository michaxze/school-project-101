class AdvertisementsController < ApplicationController
  
  def view
    ads = Ad.find(params[:id])
    views = AdsView.new
    views.ad_id = ads.id
    views.ipaddress = request.remote_ip
    views.hostname = request.host
    views.save
    redirect_to ads.redirect_to
  end

end
