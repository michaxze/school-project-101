class Member < ActiveRecord::Base
  has_many :listings
  belongs_to :member_type
end