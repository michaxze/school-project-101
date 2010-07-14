class CreateEmailAddressTable < ActiveRecord::Migration
  def self.up
    create_table :email_addresses do |t|
      t.column "email",          :string,  :null => false
      t.column "sent",           :boolean, :default => false, :null => false
      t.column "date_sent",      :datetime
      t.column "created_at",     :datetime, :null => false
      t.column "updated_at",     :datetime
    end

    add_index "email_addresses", [ "email" ], :name => "email"
    add_index "email_addresses", ["email", "sent"], :name => "email_sent"
  end

  def self.down
    drop_table :email_addresses
  end
end
