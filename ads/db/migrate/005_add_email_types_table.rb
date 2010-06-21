class AddEmailTypesTable < ActiveRecord::Migration
  def self.up
    create_table "email_types" do |t|
      t.column "code", :string
      t.column "name", :string
    end
  end

  def self.down
    drop_table :email_types
  end
end
