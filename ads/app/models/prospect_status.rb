class ProspectStatus < ActiveRecord::Base
  set_table_name "prospect_statuses"
  has_many :prospects
end
