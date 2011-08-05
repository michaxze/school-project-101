class SubmittedBusiness < ActiveRecord::Base
  set_table_name "submitted_businesses"
  
  belongs_to :location
  belongs_to :category
end