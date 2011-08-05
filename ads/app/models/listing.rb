class Listing < ActiveRecord::Base
  belongs_to :location
  belongs_to :member
  
  def self.get_all(page)
    paginate :per_page => 10,
             :page => page,
             :conditions => ["status=1"],
             :order => "created_at DESC"
  end
end