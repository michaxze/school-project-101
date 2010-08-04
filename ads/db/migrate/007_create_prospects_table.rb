class CreateProspectsTable < ActiveRecord::Migration
  def self.up
    create_table :prospects do |t|
      t.column "name",      :string
      t.column "position",  :string
      t.column "company_name",  :string
      t.column "email",    :string, :null => false
      t.column "prospect_status_id",  :integer, :default => 1
      t.column "created_at",     :datetime, :null => false
      t.column "updated_at",     :datetime
      t.column "deleted_at",     :datetime, :null => true
    end

    add_index "prospects", [ "email" ], :name => "email"
  end

  def self.down
    drop_table :prospects
  end
end
