class EmailAddress < ActiveRecord::Base
  set_table_name "email_addresses"
  validates_presence_of :email
  validates_uniqueness_of :email
end