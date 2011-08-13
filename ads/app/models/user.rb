class User < ActiveRecord::Base
  validates_presence_of :name, :login, :password_hash
  validates_uniqueness_of :login
  
  def before_save
    str = self.password_hash.first.blank? ? "d3f4ult101" : self.password_hash.first
    self.password_hash = Digest::SHA256.hexdigest(str)
  end
end