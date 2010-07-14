class CreateAdsTable < ActiveRecord::Migration
  def self.up
    create_table :ads do |t|
      t.column "name",   :string
      t.column "image",  :string, :null => true
      t.column "redirect_to",  :string
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
