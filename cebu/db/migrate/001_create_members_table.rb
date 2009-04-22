class CreateMembersTable < ActiveRecord::Migration
  def self.up
    create_table "members", :force => true do |t|
      t.column "member_type_id", :integer
      t.column "name", :integer
      t.column "home_address", :string
      t.column "email", :string
      t.column "telno", :integer
      t.column "mobileno", :integer
      t.column "password", :integer
      t.column "member_type_id", :integer
      t.column "member_type_id", :integer
      t.column "member_type_id", :integer
      t.column "member_type_id", :integer
      
    end
  end

  def self.down
    drop_table :members
  end
end
