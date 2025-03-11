# Entities
* Country (name, code)
* EcoRegion (name, country_id)
* POI - Point of Interest (eco_region_id,crop_id, longitude, latitude)
* Crop (name, country_id)
* Variety (name, crop_id)
* Parameter (name, description)
* Reading (crop_id,variety_id,parameter_id,point_of_interest_id,value)



Components
Database
Admin (Nova)
Landing Page

Process Flow
User
* Select EcoRegion (this will load crops)
* or User could search from Crop (will load EcoRegion, not compulsory)

Result will be displayed for the user (use nutritionix as a reference, the search feature)

Admin
