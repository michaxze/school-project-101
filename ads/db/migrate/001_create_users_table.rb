class CreateUsersTable < ActiveRecord::Migration
  def self.up
    create_table :users do |t|
      t.column "login",          :string,   :limit => 64, :default => "",    :null => false
      t.column "password_hash",  :string
      t.column "password_salt",  :string
      t.column "permissions",    :integer
      t.column "verified",       :boolean,                :default => true, :null => false
      t.column "created_at",     :datetime, :null => false
      t.column "updated_at",     :datetime
    end

    add_index "users", [ "login" ], :name => "login"
  end

  def self.down
    drop_table :users
  end
end
