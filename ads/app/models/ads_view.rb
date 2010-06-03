class AdsView < ActiveRecord::Base
  belongs_to :ad
  
  def self.get_views(page)
    paginate :per_page => 20,
             :page => page,
             :order => "created_at desc"
  end
  
end
