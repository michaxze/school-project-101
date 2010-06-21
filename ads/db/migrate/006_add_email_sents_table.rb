class AddEmailSentsTable < ActiveRecord::Migration
  def self.up
    create_table "email_sents" do |t|
      t.column "email_address_id", :integer
      t.column "email_type_id", :integer
      t.column "created_at", :datetime
    end
  end

  def self.down
    drop_table :email_sents
  end
end
