============================
###02 Basic Networking Terms
____
#003 Terminology_ NIC_ Computer Network and Network Protocol.mp4
	NIC - netwok interface card
	Network protocol - set of rules and conventions between network devices
	OSI model - Open system interconnection reference model
____
#005 7- Home Network and SOHO network
	SOHO - small office Home office
____
#006 8- Ping and Traceroute
 - ping
 - cmd: tracert
 	- will show all devices
____
#007 9- What is an IP address
	IP - internet protocol address
		Network address
		Host address
		DHCP - dynamic host configuration protocol (allow router to asign IP automaticaly)
____
#008 10- Network Categories and Components
	I. Physical components
	II. Logical 
____
#009 11- Domain Name System (DNS)
	- convert names to IP addresses
____
#010 12- IP Addressing and Network Sharing


==========================================
###03 Introduction to Computer Networking
____
#011 Physical Components_ Characteristics of a Network and Topology
	Components:
		- Endpoints (pc, laptop, phones, printers, etc.) - retruiew or provide data
		- Interconections - NIC
		- Network media - cables, wireless
		- Electical Signals - Copper, wireless transmission
		- Switches ...
		- Routers - one network conect to other network

		Characteristics of network:
		TOPOLOGY:
		 	(1) Physical  - interconected (cable, network devices, end points)
		 	(2) Logical Network devices appear -> netwok users (path Data transferred in a networl
		example: VLANS (virtual local area network) - able multiple Virtual networks
____
#012 Speed_ Cost_ Security_ Availability_ Scalability and Reliability
	Availability of net calculates per year:
		[number of minutes per year - down time] / [number of minutes per year]*100
		15min downtown
		([525600-15]/[525600])*100=99,9971%
	SCALABILITY - INDICATES HOW easy the network can grow
	RELIABILITY - depentability of the components. MTBF - mean time befor failure.
____
013 Physical versus logical topology and Network Diagrams
____	
014 Application types and network performance
	FTP, TFTP ....


=============
04 OSI Model
____
015 OSI Model  -  Introduction and Layers
016 OSI Model - Split of concentration
	OPEN SYSTEM INTERCONECTION MODEL
	Developer:
		LAYER 7 - Aplication
		LAYER 6 - Presentation
		LAYER 5 - Session
	Network engineer:
		LAYER 4 - Transport
		LAYER 3 - Network
		LAYER 2 - Datalink
		LAYER 1 - Physical
____
017 OSI Model - Application Layer_ Presentation Layer and Session Layer
	____________________
	LAYER 7 - Aplication - Network proces to application:
		- provide access for users
		- provides network services to application process
		- identify communications partners
		- provide user authentification
	______________________
	LAYER 6 - Presentation - Data Representation / syntax:
		- ensure hat data is readable by receiving system (ex.: .jpg open with notepad - will not be recognized )
		- formats data to be presented to application layer
		- structures the data
		- negotiates data transfer syntax for application layer
		-provide encryption
		-Example: linux and win machine can read mp3. view videos, etc, because both machines understands format that both sides understand
	______________________
	LAYER 5 - Session - Interhost communication
	- establish maintenance and termination of sessions between aplications
	two applications processes on different machines establish a session
	- In order to establsh: security, name recognision, logging, etc.
	Example: NetBIOS (Network Basic Input/Outpus system), PPT (Point-to-Point tunneling protocol)
____
018 OSI Model - Top layers versus lower layers and Transport Layer
	______________________
	LAYER 4 - Transport: Ensures End to End connection
		- message segmentations (split mesage to smaller units)
		- handle transportation issues between host
		- ensure data transport reliability (TCP)
		- establishes maintains and terminates virtual circuits between devices
		_____________________________
		MAIN protocols of this layer:
		_____
		- TCP (transmission control protocol)
			- TCP3-way handshake
				- if packet is missing it will be retransmitted
				- acknowelegment of receipt of information
			-Example: As telephone call if I call you and tell you a number You repeat that number back to me and aknowledgement/ensure that both of us got information corectly
		_____
		- UDP (User Datagram Protocol)
			-does not provide reliability
			- if packet are droped they are lost
			- doesnt retransmit lost packet (no reliacility)
			- ligthweight
			Ex.: used for VOIP (does not require the retransmition of packets)
		Flow control - manage data transmisiosn between devices (to ensure transmiting device does not send more data then the receiving device can process)
		Session Multipex - multiples several message streams or sessions into one logical link
____
019 OSI Model  Network Layer & Data Link Layer
	______________________
	LAYER 3 - Network: allabout DATA DELIVERY
		- routes data packages from one device to another
	Cisco vendors has LAYER 3 SWITCHES:
		- have router capabilities
		- routers or LAYER3 devices select the best path to deliver data. For example:
			- OSPF (open shortest path first)
			- BGP (Border Gateway Protocol)
			- IS-IS (Intermediate System-to-Intermediat system)
	______________________
	LAYER 2 - Datalink: Provides phisical access to Media
		-	defines how data is formated for transmission and how access to network is controlled
		- provides error detection
		
		Ex.: ETHERNET
			- Uses MAC (media access control) address
				- as identifier of a device
				About MAC:
					- 48 bits, and consist of two parts:
						- Organisation Unique identifier (OUI)
						- Unique portion
					- CMD: ipconfig /all - will show mac
	


===2018-12-31 iki 04-19
	______________________
	LAYER 1 - Physical






	


