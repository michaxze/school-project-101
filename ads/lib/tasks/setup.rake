namespace :setup do 
  task :update_data => :environment do
    email_types = [ 
              [ "newsletter", "Newsletter mail"],
              [ "premium", "Premium mail"],
              [ "basic", "Basic mail"]
            ]

    puts "*** adding email types"
    email_types.each do |r|
      etype = EmailType.find(:first, :conditions => ["code=?", r[0]]) || EmailType.new()
      etype.code = r[0]
      etype.name = r[1]
      etype.save
      puts etype.inspect
    end
  end

  task :move_data_to_new_tables => :environment do
    CebuLocation.find(:all).each do |r|
      puts r.inspect
      l = Location.find(r.loc_id) rescue Location.new
      l.name = r.loc_name
      l.id = r.loc_id
      l.save
    end

    CebuCategory.find(:all).each do |r|
      puts r.inspect
      c = Category.find(r.cat_id) rescue Category.new
      c.name = r.cat_name
      c.description = r.cat_description
      c.code = r.cat_url
      c.parent_id = r.cat_parent_id
      c.id = r.cat_id
      c.save
    end
    
    CebuMemberType.find(:all).each do |r|
      puts r.inspect
      code = case r.mtype_id
      when 1000
        "administrator"
      when 1001
        "maintenance"
      when 1002
        "regular"
      end

      mt = MemberType.find(r.mtype_id) rescue MemberType.new
      mt.name = r.mtype_name
      mt.description = r.mtype_desc
      mt.code = code
      mt.id = r.mtype_id
      mt.save
    end

    CebuMember.find(:all).each do |r|
      puts r.inspect
      m = Member.find(r.mem_id) rescue Member.new
      mem_type = MemberType.find(r.mem_type_id)
      m.name = r.mem_name
      m.address = r.mem_home_address
      m.email = r.mem_email
      m.telno = r.mem_telno
      m.mobileno = r.mem_mobileno
      m.password = r.mem_password
      m.status = r.mem_reg_status
      m.member_type_id = mem_type.id
      m.id = r.mem_id
      m.save
    end

    CebuBusiness.find(:all).each do |cb|
      puts cb.inspect
      b = Listing.find(cb.bus_id) rescue Listing.new
      b.name = cb.bus_name
      b.address = cb.bus_address
      b.location_id = cb.bus_loc_id
      b.member_id = cb.bus_mem_id
      b.category_id = cb.bus_cat_id
      b.website = cb.bus_website
      b.email = cb.bus_email
      b.telno = cb.bus_telno
      b.mobile_no = cb.bus_mobile_no
      b.fax_no = cb.bus_fax_no
      b.logo_url = cb.bus_logo_url
      b.page_url = cb.bus_page_url
      b.description = cb.bus_description
      b.tags = cb.bus_search_tag
      b.listing_type = "basic"
      b.status = cb.status
      b.page_code = cb.page_code
      b.created_at = cb.bus_date_added.to_date
      b.save
    end
  end
end