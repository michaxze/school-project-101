class Message < ActiveRecord::Base
  set_table_name "cebu_contactus"

  def self.get_messages(page)
    paginate :per_page => 3,
             :page => page,
             :order => "report_datesent desc"
  end
end