class TableMigration < ActiveRecord::Migration
  def self.up
    create_table :listings do |t|
      t.string :name
      t.string :address 
      t.integer :member_id
      t.integer :category_id
      t.integer :location_id
      t.string :website, :null => true
      t.string :email
      t.string :telno, :null => true
      t.string :mobile_no, :null => true
      t.string :fax_no, :null => true
      t.string :logo_url, :null => true
      t.string :page_url, :null => true
      t.string :description
      t.string :tags, :null => true
      t.integer :views, :default => 0
      t.string :listing_type, :default => "basic"
      t.integer :status
      t.string :page_code, :null => true
      t.string :twitter, :null => true
      t.string :facebook, :null => true

      t.timestamps
    end
    
    create_table :members do |t|
      t.integer :member_type_id
      t.string :name
      t.string :address
      t.string :email
      t.string :telno, :null => true
      t.string :mobileno, :null => true
      t.string :password
      t.integer :status
      t.date :last_login
    end

    create_table :member_types do |t|
      t.string :name
      t.string :description, :null => true
      t.string :code
    end
    
    create_table :locations do |t|
      t.string :name
    end
    
    create_table :categories do |t|
      t.string :name
      t.string :description, :null => true
      t.string :code
      t.integer :parent_id, :null => true
    end
  end

  def self.down
  end
end
