# This file is auto-generated from the current state of the database. Instead of editing this file, 
# please use the migrations feature of Active Record to incrementally modify your database, and
# then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your database schema. If you need
# to create the application database on another system, you should be using db:schema:load, not running
# all the migrations from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended to check this file into your version control system.

ActiveRecord::Schema.define(:version => 2) do

  create_table "cebu_administrator", :primary_key => "admin_id", :force => true do |t|
    t.string   "admin_firstname", :limit => 20, :default => "", :null => false
    t.string   "admin_lastname",  :limit => 20, :default => "", :null => false
    t.string   "admin_username",  :limit => 20, :default => "", :null => false
    t.string   "admin_password",  :limit => 20, :default => "", :null => false
    t.datetime "date_last_login",                               :null => false
    t.integer  "is_active",       :limit => 2,  :default => 0,  :null => false
  end

  create_table "cebu_ads", :primary_key => "ads_id", :force => true do |t|
    t.integer  "ads_bus_id",                      :default => 0,  :null => false
    t.integer  "ads_type_id",                     :default => 0,  :null => false
    t.integer  "ads_no_of_clicks"
    t.datetime "ads_last_click"
    t.string   "ads_image_url",    :limit => 100, :default => "", :null => false
    t.datetime "ads_start_date",                                  :null => false
    t.datetime "ads_expire_date",                                 :null => false
  end

  add_index "cebu_ads", ["ads_bus_id"], :name => "ads_bus_id"
  add_index "cebu_ads", ["ads_type_id"], :name => "ads_type_id"

  create_table "cebu_ads_types", :primary_key => "atype_id", :force => true do |t|
    t.string "atype_dimension", :limit => 150, :default => "",  :null => false
    t.float  "atype_price",                    :default => 0.0, :null => false
    t.string "atype_file_type", :limit => 200, :default => "",  :null => false
  end

  create_table "cebu_business", :primary_key => "bus_id", :force => true do |t|
    t.integer  "bus_mem_id",                                :default => 0,     :null => false
    t.integer  "bus_cat_id",                                :default => 0,     :null => false
    t.integer  "bus_temp_id",                               :default => 0,     :null => false
    t.integer  "bus_loc_id",                                :default => 0,     :null => false
    t.string   "bus_address",                               :default => "",    :null => false
    t.string   "bus_name",            :limit => 100,        :default => "",    :null => false
    t.string   "bus_website",         :limit => 100,        :default => "",    :null => false
    t.string   "bus_email",                                 :default => "",    :null => false
    t.string   "bus_telno",           :limit => 50,         :default => "",    :null => false
    t.string   "bus_mobile_no",       :limit => 50,         :default => "",    :null => false
    t.string   "bus_fax_no",          :limit => 50
    t.string   "bus_logo_url"
    t.string   "bus_page_url",                              :default => "",    :null => false
    t.text     "bus_description",     :limit => 2147483647
    t.text     "bus_search_tag",      :limit => 2147483647
    t.integer  "bus_no_of_views"
    t.datetime "bus_date_added"
    t.datetime "bus_date_lastviewed"
    t.boolean  "is_pro_account",                            :default => false, :null => false
  end

  add_index "cebu_business", ["bus_cat_id"], :name => "bus_cat_id"
  add_index "cebu_business", ["bus_loc_id"], :name => "bus_loc_id"
  add_index "cebu_business", ["bus_mem_id"], :name => "bus_mem_id"
  add_index "cebu_business", ["bus_temp_id"], :name => "bus_temp_id"

  create_table "cebu_business_comments", :primary_key => "bcom_id", :force => true do |t|
    t.integer  "bcom_bus_id",                            :default => 0,           :null => false
    t.integer  "bcom_mem_id",                            :default => 0,           :null => false
    t.integer  "bcom_parent_id",   :limit => 8,          :default => 0,           :null => false
    t.string   "bcom_name",        :limit => 100,        :default => "Anonymous", :null => false
    t.string   "bcom_email",                                                      :null => false
    t.text     "bcom_description", :limit => 2147483647,                          :null => false
    t.datetime "bcom_date_posted",                                                :null => false
    t.string   "bcom_approved",    :limit => 0,          :default => "1",         :null => false
    t.boolean  "bcom_is_hidden",                         :default => false,       :null => false
  end

  add_index "cebu_business_comments", ["bcom_bus_id"], :name => "bcom_bus_id"

  create_table "cebu_categories", :primary_key => "cat_id", :force => true do |t|
    t.string  "cat_name",        :limit => 50,         :default => "",    :null => false
    t.text    "cat_description", :limit => 2147483647,                    :null => false
    t.string  "cat_header",      :limit => 100,        :default => "",    :null => false
    t.integer "cat_parent_id",                         :default => 0,     :null => false
    t.string  "cat_url",         :limit => 200
    t.boolean "is_shown",                              :default => false, :null => false
  end

  add_index "cebu_categories", ["cat_name"], :name => "cat_name", :unique => true

  create_table "cebu_contactus", :primary_key => "report_id", :force => true do |t|
    t.string   "name",            :limit => 200, :default => "", :null => false
    t.string   "address",         :limit => 250, :default => "", :null => false
    t.string   "report_type",     :limit => 50,  :default => "", :null => false
    t.string   "report_email",    :limit => 200, :default => "", :null => false
    t.string   "report_subject",  :limit => 254, :default => "", :null => false
    t.text     "report_message",                                 :null => false
    t.datetime "report_datesent",                                :null => false
    t.integer  "is_viewed",       :limit => 1,   :default => 0,  :null => false
  end

  create_table "cebu_events", :primary_key => "cevents_id", :force => true do |t|
    t.integer  "cevents_bus_id",                               :default => 0,     :null => false
    t.integer  "cevents_type_id",        :limit => 8,          :default => 0,     :null => false
    t.string   "cevents_title",                                :default => "",    :null => false
    t.text     "cevents_description",    :limit => 2147483647,                    :null => false
    t.datetime "cevents_date_posted",                                             :null => false
    t.datetime "cevents_start_date",                                              :null => false
    t.datetime "cevents_end_date",                                                :null => false
    t.string   "cevents_image_url",                            :default => "",    :null => false
    t.string   "cevents_page_url",                                                :null => false
    t.string   "cevents_contact_person",                       :default => "",    :null => false
    t.string   "cevents_contact_number", :limit => 50,         :default => "",    :null => false
    t.boolean  "cevents_hot_event",                            :default => false, :null => false
    t.integer  "cevents_views",                                :default => 0,     :null => false
  end

  add_index "cebu_events", ["cevents_bus_id"], :name => "cevents_bus_id"
  add_index "cebu_events", ["cevents_type_id"], :name => "cevents_type_id"

  create_table "cebu_events_comments", :primary_key => "ecom_id", :force => true do |t|
    t.integer  "ecom_event_id",    :limit => 8,                                   :null => false
    t.integer  "ecom_parent_id",   :limit => 8,          :default => 0,           :null => false
    t.string   "ecom_name",        :limit => 100,        :default => "Anonymous", :null => false
    t.text     "ecom_description", :limit => 2147483647,                          :null => false
    t.datetime "ecom_date_posted",                                                :null => false
    t.string   "ecom_email",       :limit => 200,                                 :null => false
    t.string   "ecom_approved",    :limit => 0,          :default => "1",         :null => false
    t.boolean  "ecom_is_hidden",                         :default => false,       :null => false
  end

  add_index "cebu_events_comments", ["ecom_event_id"], :name => "ecom_event_id"

  create_table "cebu_events_type", :primary_key => "etype_id", :force => true do |t|
    t.string "etype_name", :limit => 25, :default => "", :null => false
    t.string "etype_desc",               :default => "", :null => false
  end

  create_table "cebu_images", :primary_key => "img_id", :force => true do |t|
    t.integer  "img_bus_id",                       :default => 0,          :null => false
    t.string   "img_use",           :limit => 20,  :default => "BUSINESS", :null => false
    t.string   "img_name",          :limit => 250
    t.string   "img_description",   :limit => 250, :default => "",         :null => false
    t.string   "img_type",          :limit => 0,   :default => "jpg",      :null => false
    t.integer  "img_size",          :limit => 8,   :default => 0,          :null => false
    t.string   "img_url",           :limit => 200, :default => "",         :null => false
    t.datetime "img_time_uploaded",                                        :null => false
    t.boolean  "img_is_primary",                   :default => false,      :null => false
  end

  add_index "cebu_images", ["img_bus_id"], :name => "img_bus_id"
  add_index "cebu_images", ["img_name"], :name => "img_name", :unique => true

  create_table "cebu_location", :primary_key => "loc_id", :force => true do |t|
    t.string  "loc_name",     :limit => 100
    t.boolean "loc_is_shown",                :default => false, :null => false
  end

  create_table "cebu_member_type", :primary_key => "mtype_id", :force => true do |t|
    t.string "mtype_name", :limit => 100
    t.string "mtype_desc"
  end

  create_table "cebu_members", :primary_key => "mem_id", :force => true do |t|
    t.integer  "mem_type_id",                        :default => 0,  :null => false
    t.string   "mem_name",            :limit => 100, :default => "", :null => false
    t.string   "mem_home_address",                   :default => "", :null => false
    t.string   "mem_email",                          :default => "", :null => false
    t.string   "mem_telno",           :limit => 50
    t.string   "mem_mobileno",        :limit => 50
    t.string   "mem_password",        :limit => 50
    t.integer  "mem_reg_status"
    t.datetime "mem_date_registered"
    t.datetime "mem_date_applied"
    t.datetime "mem_date_last_login"
    t.string   "bill_lastname",       :limit => 50,  :default => "", :null => false
    t.string   "bill_firstname",      :limit => 50,  :default => "", :null => false
    t.string   "bill_address1",                      :default => "", :null => false
    t.string   "bill_address2",                      :default => "", :null => false
    t.string   "bill_telno",          :limit => 50,  :default => "", :null => false
    t.string   "bill_cardnumber",     :limit => 20,  :default => "", :null => false
    t.string   "bill_exp_month",      :limit => 10,  :default => "", :null => false
    t.string   "bill_exp_year",       :limit => 5,   :default => "", :null => false
  end

  add_index "cebu_members", ["mem_name"], :name => "mem_name", :unique => true
  add_index "cebu_members", ["mem_type_id"], :name => "mem_type_id"

  create_table "cebu_posts", :primary_key => "cposts_id", :force => true do |t|
    t.integer  "cposts_bus_id",                            :default => 0,      :null => false
    t.integer  "cposts_cat_id",                            :default => 0,      :null => false
    t.integer  "cposts_mem_id",                            :default => 0,      :null => false
    t.string   "cposts_title",                             :default => "",     :null => false
    t.text     "cposts_content",     :limit => 2147483647,                     :null => false
    t.string   "cposts_page_url",                                              :null => false
    t.datetime "cposts_date_posted",                                           :null => false
    t.string   "cposts_type",        :limit => 0,          :default => "post", :null => false
    t.boolean  "cposts_status",                            :default => false,  :null => false
    t.integer  "cposts_views",                                                 :null => false
  end

  add_index "cebu_posts", ["cposts_cat_id"], :name => "cposts_cat_id"
  add_index "cebu_posts", ["cposts_mem_id"], :name => "cposts_mem_id"

  create_table "cebu_stats", :id => false, :force => true do |t|
    t.string   "stat_ip",       :limit => 41,  :default => "", :null => false
    t.string   "stat_hostname", :limit => 254, :default => "", :null => false
    t.datetime "stat_date",                                    :null => false
  end

  create_table "cebu_templates", :primary_key => "temp_id", :force => true do |t|
    t.string "temp_name",    :limit => 50,  :default => "", :null => false
    t.string "temp_img_url", :limit => 200, :default => "", :null => false
  end

  add_index "cebu_templates", ["temp_name"], :name => "temp_name", :unique => true

  create_table "cebu_verification", :force => true do |t|
    t.string "code",  :limit => 254, :default => "", :null => false
    t.string "email", :limit => 254, :default => "", :null => false
  end

  create_table "email_addresses", :force => true do |t|
    t.string   "email",                         :null => false
    t.boolean  "sent",       :default => false, :null => false
    t.datetime "date_sent"
    t.datetime "created_at",                    :null => false
    t.datetime "updated_at"
  end

  add_index "email_addresses", ["email", "sent"], :name => "email_sent"
  add_index "email_addresses", ["email"], :name => "email"

  create_table "products", :force => true do |t|
    t.string   "itemname",         :limit => 50,  :default => "", :null => false
    t.string   "picture",          :limit => 100, :default => "", :null => false
    t.text     "description",                                     :null => false
    t.string   "price_size",       :limit => 250, :default => "", :null => false
    t.datetime "date_last_update",                                :null => false
    t.integer  "is_deleted",       :limit => 2,   :default => 0,  :null => false
  end

  create_table "users", :force => true do |t|
    t.string   "login",         :limit => 64, :default => "",   :null => false
    t.string   "password_hash"
    t.string   "password_salt"
    t.integer  "permissions"
    t.boolean  "verified",                    :default => true, :null => false
    t.datetime "created_at",                                    :null => false
    t.datetime "updated_at"
  end

  add_index "users", ["login"], :name => "login"

end
