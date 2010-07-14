class AddColumnsToAds < ActiveRecord::Migration
  def self.up
    add_column :ads, "is_active", :boolean, :default => false
    add_column :ads, "total_views", :integer, :default => 0
    add_column :ads, "created_at", :datetime
    add_column :ads, "updated_at", :datetime
  end

  def self.down
    # dont try to drop the columns
  end
end
