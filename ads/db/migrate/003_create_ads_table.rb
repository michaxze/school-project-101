class CreateAdsTable < ActiveRecord::Migration
  def self.up
    create_table :ads do |t|
      t.column "name",   :string
      t.column "image",  :string
      t.column "redirect_to",  :string
      t.column "created_at",     :datetime, :null => false
      t.column "updated_at",     :datetime
    end

    create_table :ads_views do |t|
      t.column "ad_id",   :integer
      t.column "ipaddress", :string
      t.column "hostname", :string
      t.column "created_at", :datetime
    end

  end

  def self.down
    drop_table :ads
  end
end
