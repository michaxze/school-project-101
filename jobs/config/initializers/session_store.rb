# Be sure to restart your server when you modify this file.

# Your secret key for verifying cookie session data integrity.
# If you change this key, all old sessions will become invalid!
# Make sure the secret is at least 30 characters and all random, 
# no regular words or you'll be exposed to dictionary attacks.
ActionController::Base.session = {
  :key         => '_jobs_session',
  :secret      => '06f71d3e675254942f59110af419f029ade3fd9de42a0432823120fcddbc8b52d18ef57cc4916f93beb90b8c498195491b40ef31de8f8b59d5ad18522252ef43'
}

# Use the database for sessions instead of the cookie-based default,
# which shouldn't be used to store highly confidential information
# (create the session table with "rake db:sessions:create")
# ActionController::Base.session_store = :active_record_store
