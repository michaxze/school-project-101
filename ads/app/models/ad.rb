class Ad < ActiveRecord::Base
  file_column :image, :magick => { :geometry => "960x250" }
end
