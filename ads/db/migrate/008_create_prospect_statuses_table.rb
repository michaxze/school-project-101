class CreateProspectStatusesTable < ActiveRecord::Migration
  def self.up
    create_table :prospect_statuses do |t|
      t.column "name",  :string
      t.column "code",  :string
    end

    add_index "prospect_statuses", [ "code" ], :name => "code"
  end

  def self.down
    drop_table :prospect_statuses
  end
end
