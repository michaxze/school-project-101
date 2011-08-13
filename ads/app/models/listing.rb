class Listing < ActiveRecord::Base
  belongs_to :location
  belongs_to :member
  has_many :comments, :as => :commentable

  validates_uniqueness_of :name
  validates_presence_of :name, :address, :member_id, :category_id, :location_id

  def self.get_all(page)
    paginate :per_page => 10,
             :page => page,
             :conditions => ["status=1"],
             :order => "created_at DESC"
  end
  
  def self.my_listing(user, page)
    paginate :per_page => 10,
             :page => page,
             :conditions => ["created_by = ?", user.login],
             :order => "created_at DESC"
  end
  
  def self.get_unapproved(page)
    paginate :per_page => 10,
             :page => page,
             :conditions => ["status IS NULL"],
             :order => "created_at DESC"
  end
end