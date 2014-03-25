/*
Title: How it Works
Section: Mobile
*/

# How 2600hz Mobile Works

This document talks about how 2600hz Mobile is made possible.

2600hz Mobile consists of three main components:

1. A direct, physical connection from our datacenter to our network carriers (such as Sprint&tm; Wireless)
2. Network gear and a custom 2600hz SoftSwitch that route voice calls between mobile devices and the PSTN network (or your own equipment)
3. APIs that make it easy for you to activate and manage the physical devices, SMS/MMS services, data and billing related to mobile integration

Let's go over each of these components.


## Network Integration

Probably the hardest part of our integration, the network integration requires direct physical access to the facilities in which our network carriers operate. This is the best way to ensure call quality, reliability and low latency.

Currently, we have three physical datacenter locations where we process mobile network traffic. They are in Santa Clara, CA, Newark, NJ and Chicago, IL.

The setup and maintenance of these facilities, the SoftSwitch and related services represent a cost of approximately $500,000 annually. By providing this integration via simple to use APIs, we are able to spread out the cost of this integration to multiple customers so you don't need to incur these costs yourself but can provide similar services.


## Call Routing

Our call routing services allow you to manipulate voice calls via any standard SIP-compliant equipment. This is unique in the industry since it allows one-number services and features normally found on corporate PBXes to apply to mobile devices as well, using native phone features.

With this integration, you can choose to pair our existing Kazoo platform (hosted or private install) with mobile services, or you can bring another switch, such as an Asterisk or Broadsoft switch, into the mix.

In addition, we can provide private MPLS connections between our datacenter and your datacenter, keeping all call routing off the public Internet. This helps with security, latency, call quality and compliance.


## Device Management

Native carriers don't offer friendly APIs because their systems are typically older then current revisions of web services. Our APIs have been streamlined to bridge that gap.

Using our REST APIs, we offer not only device control but account management services, such as billing, limits and other services. These APIs include:

* Device Activation
* Device Swapping
* Phone Number Porting
* SIP Call Routing Control
* Realtime Call Management
* Account Suspension
* Account Cancellation

and more.


## Differences vs. Other Offerings

There are a number of critical differentiators between the 2600hz service and other providers. For comparison purposes, we list a few here:

* Twilio - The Twilio client is an example of an app pitching mobile support, however, it is an "over the top" app. All voice communications are via the native mobile network's data services unless you program Twilio to call the mobile phone, which then uses the native voice service (Verizon, AT&T, etc.). Twilio can't actually be your mobile phone company and act as your mobile phone bill, and their integrations don't intercept native phone calls made from the default dialer on most phones.
* Republic Wireless - Republic Wireless's "Hybrid WiFi / Cellular" approach is novel but not unique. You can provide a similar experience via the native SIP stack on most Android devices. More important, you can't brand and resell Republic Wireless services and you can't activate any device you want.
* Ting - Ting doesn't provide any SIP handoff abilities to offer your own voice features, or any resale abilities


### MVNA Agreements

2600hz is in a unique position, having secured an agreement which allows us to aggregate mobile traffic amongst smaller providers. This allows you to brand your service but bypass typical startup and setup costs, plus remove the downtime for getting your service off the ground.

2600hz Mobile represents one of the country's first Mobile Virtual Network Aggregators (MVNA), where we aggregate volume across multiple wholesale clients, while keeping costs low.



