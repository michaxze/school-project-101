class CebuLocation < ActiveRecord::Base
  set_table_name 'cebu_location'
  set_primary_key 'loc_id'

  class << self

    def for_select
      address = find(:all, :order => "loc_name asc")
      arr = []

      address.each do |a|
        arr << [ a.loc_name, a.id]
      end

      arr
    end

  end
end