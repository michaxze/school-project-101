# Be sure to restart your server when you modify this file.

# Your secret key for verifying cookie session data integrity.
# If you change this key, all old sessions will become invalid!
# Make sure the secret is at least 30 characters and all random, 
# no regular words or you'll be exposed to dictionary attacks.
ActionController::Base.session = {
  :key         => '_ads_session',
  :secret      => 'e3f7b9a2fa4ad5b31c6b3875a8844015c7c397baf8917d9b41385f21da9329b12d980ea271ddd736ff4e90f088e12f4690d3d5447d0ba225188b1efaa17366fc'
}

# Use the database for sessions instead of the cookie-based default,
# which shouldn't be used to store highly confidential information
# (create the session table with "rake db:sessions:create")
# ActionController::Base.session_store = :active_record_store
