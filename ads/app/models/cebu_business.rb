class CebuBusiness < ActiveRecord::Base
  set_table_name "cebu_business"
  set_primary_key 'bus_id'

  belongs_to :category, :foreign_key => 'bus_cat_id'
  validates_presence_of :bus_name
  validates_presence_of :bus_address
end

