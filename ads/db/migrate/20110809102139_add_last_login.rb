class AddLastLogin < ActiveRecord::Migration
  def self.up
    add_column :users, :last_login, :datetime, :null => true
  end

  def self.down
  end
end
