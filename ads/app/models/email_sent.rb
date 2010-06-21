class EmailSent < ActiveRecord::Base
  set_table_name "email_sents"
  
  belongs_to :email_addresses
end