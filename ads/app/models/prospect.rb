class Prospect < ActiveRecord::Base
  belongs_to :prospect_status

  def self.find_paginated(page)
    paginate :per_page => 15,
            :page => page,
            :conditions => ["deleted_at IS NULL"],
            :order => "created_at DESC"
  end
  
end