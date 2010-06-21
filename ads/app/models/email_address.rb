class EmailAddress < ActiveRecord::Base
  set_table_name "email_addresses"
  validates_presence_of :email
  validates_uniqueness_of :email
  
  has_one :email_type
  has_many :email_sents
end