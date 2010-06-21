class EmailType < ActiveRecord::Base
  set_table_name "email_types"
  
  belongs_to :email_addresses
end