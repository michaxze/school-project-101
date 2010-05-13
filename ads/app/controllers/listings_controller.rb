class ListingsController < ApplicationController
  layout 'global'
  before_filter :authorize
  
  def index
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
  

end
