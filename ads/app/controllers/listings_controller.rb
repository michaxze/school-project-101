class ListingsController < ApplicationController
  layout 'global'
  before_filter :authorize

  def index
    
  end
  
  def update_status
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
  
  def www
    businesses = CebuBusiness.find(:all)
    businesses.each do |bus|
      www = bus.bus_website.gsub("http://", "")
      new_url = "http://" + www
      bus.connection.execute("Update cebu_business set bus_website='#{new_url}' where bus_id = #{bus.bus_id}")
    end
  end
  
  def signups
    
  end
end
