class AddIdColumnToCebuBusiness < ActiveRecord::Migration
  def self.up
    add_column :cebu_business, :id, :integer
  end

  def self.down
    remove_column :cebu_business, :id
  end
end
