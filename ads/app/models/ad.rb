class Ad < ActiveRecord::Base
  has_many :ads_views
  
  #file_column :image, :magick => { :geometry => "960x250" }
  def self.save_ads_image(ad, filename, upload)
      directory = "public/images/ads"
      # create the file path
      path = File.join(directory, filename)
      # write the file
      File.open(path, "wb") { |f| f.write(upload['datafile'].read) }
  end  
  
  def after_delete
    directory = "public/images/ads"
    path = File.join(directory, self.image)
    
    #always return true
    File.delete(path) rescue true
  end
end
