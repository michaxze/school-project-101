class AddCreatedByToListingTable < ActiveRecord::Migration
  def self.up
    add_column :listings, :created_by, :string, :null => true
  end

  def self.down
  end
end
