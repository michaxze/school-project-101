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
end