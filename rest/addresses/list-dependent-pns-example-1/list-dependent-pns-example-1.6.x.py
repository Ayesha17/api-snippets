# Download the Python helper library from twilio.com/docs/python/install
from twilio.rest import Client

# Your Account Sid and Auth Token from twilio.com/user/account
account_sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
auth_token = "your_auth_token"
client = Client(account_sid, auth_token)

# A list of dependent phone number objects
numbers = client.addresses('AD2a0747eba6abf96b7e3c3ff0b4530f6e') \
                .dependent_phone_numbers \
                .list()

for number in numbers:
    print(number.friendly_name)
