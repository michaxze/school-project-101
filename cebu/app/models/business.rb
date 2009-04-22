class Business
  belongs_to :member
  
   
 class << self
   def get_top(limit=0)
      find(:all,                
           :joins => "INNER JOIN cebu_members ON cebu_members.id = cebu_business.bus_mem_id ",
           :conditions => "cebu_members.mem_reg_status = 1",
           :order => "bus_date_added DESC",
           :limit => limit)
   end  
 end  
  
end