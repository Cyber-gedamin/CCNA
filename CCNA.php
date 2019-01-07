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
#013 Physical versus logical topology and Network Diagrams
____	
#014 Application types and network performance
	FTP, TFTP ....


=============
#04 OSI Model
____
#015 OSI Model  -  Introduction and Layers
#016 OSI Model - Split of concentration
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
#017 OSI Model - Application Layer_ Presentation Layer and Session Layer
	____________________
	LAYER 7 - Aplication - Network proces to application:
		- provide access for users
		- provides network services to application process
		- identify communications partners
		- provide user authentification
	______________________
	LAYER 6 - Presentation - Data Representation / syntax:
		- ensure what data is readable by receiving system (ex.: .jpg open with notepad - will not be recognized )
		- formats data to be presented to application layer
		- structures the data
		- negotiates data transfer syntax for application layer
		-provide encryption
		-Example: linux and win machine can read mp3. view videos, etc, because both machines understands format that both sides understand
	______________________
	LAYER 5 - Session - Interhost communication
	- establish maintenance and termination of sessions between aplications
	two applications processes on different mashines establish a session
	- IOT establsh: security, name recognision, logging, etc.
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
	LAYER 3 - Network: all about DATA DELIVERY
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
___
020 OSI Model - Layer 1_ Physical Layer
	______________________
	LAYER 1 - Physical: Binary transmision:
		- What state represents a 0 or a 1
		- defines the electrical, mechcanical, procedural and functional specifications for activating and deactivating the physical link
___
021 OSI Model - Host Communication
	Encapsulation
	FCS (frame check sequence) added between all layers enshures what data not curupted from sender to receiver
	IN each layer prepins a new header (so data encapsulated between layers)
	Wireshark
___
022 OSI Model - Encapsulation
	Encapsulation - Sender
	De-Encapsulation - receiver
	Each layer only comunicates with ecvivalent layer between devices (Layer1 with layer1, l2-L2, etc)
	Peer to peer comunication, transmits:
		LAYER 4 - Transport  --> segments
		LAYER 3 - Network  --> packets
		LAYER 2 - Data Link  -->Frames
		LAYER 1 - Physical --> Bits
___
023 OSI Model - TCP_IP versus OSI model
OSI model,
TCP/IP,
	Aplication
	Transport
	Internet
	Network Accces
Hybrid,
	Aplication
	Transport
	Network
	Data Link
	Physical
___
024 OSI Model - Demonstration using Wireshark

DEMONSTRATION wireshark


=============
05 Binary
___
025 Binary Introduction
	Binary 0 or 1
	Binary, important due to:
		- Subnetting
		- AccessList
___
026 Binary versus Decimal
	2(nuliniu) 1
	2(pirmuoju) 2
	2(antruoju) 2*2= 4
	2(treciuoju) 2*2*2=8
	ir t.t.

Famous table; http://prntscr.com/m22w4r
	BASE  	
	BINARY
	DECIMAL
___
027 Examples
http://prntscr.com/m22skd
http://prntscr.com/m22smy
http://prntscr.com/m22spp

___
028 Convert IP Addresses to Binary
	IPv4 Address:
		- used to uniquely identify a device on an IP network
		- 4 octets in lenght
			- 8 bits in lenght in the range of 0 to 255
		Example:
		10.129.16.123
		http://prntscr.com/m22vb3
___
029 Convert Binary to Decimal

===
06 Hexadecimal
___
030 Hexadecimal - Demo of MAC addresses and ARP cache
	CMD: IP config / all | more
	CMD: arp -a
___
031 Hexadecimal conversion theory and demos
	BINARY: 0 or 1
	DEMICAL 0 to 9
	HEXADECIMAL: 0-F
		0,1,2,3,4,5,6,7,8,9, A, B, C ,D, E, F
		0,1,2,3,4,5,6,7,8,9, 10,11,12,13,14,15
		eXAMPLE: http://prntscr.com/m2ggfu
___
032 Hexadecimal conversion theory and demos (continued)
___
033 Hexadecimal conversion theory and demos (continued)

====
07 IP Addressing
___
034 IP Addressing Overview and Demonstration
	ip4
	ADDRESS CLASSES:
		Class A
		Class B
		Class C
		Class D
		Class E 
		CIDR
	SPECIAL: ADDRESS:
		-loopback
		-local broadcast address
	NETWORK MASKS
	IP address: LAYER 3 logical address assigned by an administrator
	-Used to identify specific devices on a network
___
035 IP Characteristics and IPv4 Address Format
	CMD: ipconfig
	IPv4:
		- Layer 3
		- Connectionless Protocol
			-TCP is connection oriented
		-  packets treated independently
	 		- may take different paths
	 	- no built in session
	 	- no retransition
	 IP address = 32 bit
	 x.x.x.x. each x (in each octets) is 8 bits OR  1 byte
	 8 binary bits/1byte
	 - has a hierachical structure to enable routing
___
036 Network versus Host portion
	NETWORK ADDRESS PORTION (Network ID)
		- indentifies a specific network
		- routers maintain routing tables that contain the network
		- look at the destination of IP address and match network address
	HOST ADDRESS PORTION (host ID):
		- indentifies a specific endpoint on network
		- servers, printers, PC, iphone, etc.

	ARP - address resolution protocol
___
037 IPv4 Address format (Street Analogy) and Address Classes
	ADDRESS CLASSES:
		UNICAST Trafic:
			Class A
			Class B
			Class C
		A, B, C classes:
			-supports 60 million IP addresses
			-replaced by CIDR in 1993
			-Accomodate different size of networks
			-determined by the Interenet Assigned Numbers Authority (IANA)
		MULTICAST:
			Class D
		Reserved for future or experimental purposes
			Class E 
	IPv6 - does not use address classes
	IPv4 - address classes was replaced by CIDR
___
038 Class A and B addresses
	Class A FROM: 0.0.0.0 TO 127.255.255.255
			exceptions: 127 is reserved for loopback (not available on PC to configure 127.0.0.1. o network 0.1.1.1)
		Actual range: 1.0.0.0 to 126.255.255.255

		10.1.1.1
		10 - First 8 bits is Networks
		1.1.1 - remaining 24 bits is Hosts

	Class B
		Starts with binary 10 (one zero)
		128.0.0.0 to 191.255.255.255
		172.16.1.1
			172 - identifies that it is Class B
			172.16 - Network portion
			1.1. Host portion

___
039 Class C_ D_ E_ A and B addresses
	Class C - starts with binary 110 (one, one, zero)
	192.0.0.0 to 233.255.255.255
	Example:
		192.168.1.1
		192 - class C
		192.168.1 - Network
		1 - Host

	Class D  RANGE: 224 to to 239
		Class A, B, C = Unicast
		Class D = Multicast, used internaly by your organisation
		Example:
		239.1.1.1 private multicast address

		Class E - reserved addresses for broadcast
			RANGE: 240.0.0.0 to 255.255.255.255

===2019-01-03 iki [39]			








	

 


VISO 543




















