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
		 	(2) Logical Network devices appear -> netwok users (path Data transferred in a network
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
		- provide encryption
		- Example: linux and win machine can read mp3. view videos, etc, because both machines understands format that both sides understand
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
			-Example: As telephone call if I call you and tell you a number You repeat that number back to me and aknowledgement/ensure that both of us got information corectly.
		_____
		- UDP (User Datagram Protocol)
			- does not provide reliability
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
			Class A up to 127
			Class B from 128 to 191
			Class C from 192 to 233
		A, B, C classes:
			-supports 60 million IP addresses
			-replaced by CIDR in 1993
			-Accomodate different size of networks
			-determined by the Interenet Assigned Numbers Authority (IANA)
		MULTICAST:
			Class D from 234 to 239
		Reserved for future or experimental purposes
			Class E from 240 to 255
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
___
040 Special IPv4 Addresses and Directed Broadcast Address
	CIDR - Classless Inter-Domain Routing

	Directed Broadcast Address:
		- host sends data to all devices on a specific netwok
		- not permited on CISCO deviced IOT not have DoS atck (ex. with SMURF - DoS soft)
	
___
041 Local Broadcast Address
		LOCAL BROADCAST ADDRESS:
		- communicate with all devices on local network
		- address is all binarys
		11111111.11111111.11111111.11111111 (binary)
		255.255.255.255 (decimanl)

		DHCP - Dynamic host configuration protocol. Provide IP adresses dynamicaly. No need to confugure manualy.
___
042 Local Loopback Address
	- Used to let a system send message to itself for testing
	- this is very useful to make sure that the TCP/IP stack is correctly instaled on a mashine
	-Ex.: CMD: ping 127.127.127.127 (t.y. all range for 127 will be used for loopback)

	Note: routers have loopback addresses which are not the same as local loopback address

___
043 RFC1918 - Private Addresses
	RFC - request for comments
		- internet standarts
	RFC1918 - Private Addresses
			- non routable on the Internet

___
044 RFC1918 - Class A_ B_ C and IPv4 Link Local Addresses
	RFC1918:
	- non routable on the Internet
	- Three block of IP addresses:
		-1- 1 Class A Network
		-2- 16 Class B Network
		-3- 256 Class C Network
	PRIVATE:
		- 10.0.0.0 to 10.255.255.255
		- 172.16.0.0 to 172.31.255.255
		- 192.168.0.0 to 192.168.255.255

	Example:
		if  my addres 10.1.1.1 and I will pin google.com  my IP will be NAT'ed (Network address translated) to publicaly routed addesses
		NAT - network addres trasnlate

	RFC3927
	- Automatic Private IP Address (APIPA)

___
045 Subnet Masks
	- Used to determine network and host portion
		- Used to determine which part on an IP address is the network portion and which part on an IP address is host portion
	- it is finds out which device remote or local
	DETERMINE:
		REMOTE:
		 - thus be reached via a default gateway-different subnets
		LOCAL:
		 - does not require a default gateway-same subnet

	Class A, B, C networks have default masks also known as natural masks
	________
	Example:
	10.1.1.1  = 00001010.00000001.00000001.00000001.00000001
	255.0.0.0 = 11111111.00000000.00000000.00000000.00000000
		- ONE (in binary) '1' INDICATES - NETWORK
		- ZERO (in binary) '0' INDICATES - HOSTS
	so 10.1.1.1 (will be on network 10.0.0.0)
		10 will indicate network portion (NetID = 00001010 = 10)
		1.1.1 will indicate host portion (HostID = 00000001.00000001.00000001.00000001 = 1.1.1 )


HOST - any device in netwok with IP

___
046 Subnet mask demonstrations and Discontiguous Network Masks
	CISCO do not support discontiguous masks
		ex.: 	240.255.3.191
				11110000.11111111.00000110.11000000 
				t.y. negali buti vienetai po to nuliai ir po to vel vienetai. gali buti vienetai o po to nuliai
		ONLY contiguous subnet mask are supported
		ex.: 	11111111.11110000.00000000.00000000 = 255.24.0.0.0
				11111111.11111111.11000000.00000000 = 255.255.192.0

___
047 CIDR Notation Part 1 and Part 2
	Classless Inter-Domain Routing
	CIDR - able to implement VARIABLE LENGHT SUBNET MASK
		- Introduced in 1993
		- replace classfull IP addresing
		- variable length subnet mask (VLSM)
			USE:          10.0.0.0/8 notation
			Rather than:  10.0.0.0 255.0.0.0 notation

	/X Mask
		Dotted decimal:			Binary bits
			255.255.255.0		/24

			Conver mask to binary:
			255 = 11111111 (8 binary 1's)
			255 = 11111111 (8 binary 1's)
			255 = 11111111 (8 binary 1's)
			0   = 00000000 (0 binary 1's)

			ex. 255.555.0.0 / 16
				8  + 8 +0+0 = 16

____
048 CIDR Notation Part 3
	CIDR Problems:
		Class A
			-16777214 hos addresses
			-Mask of 255.0.0.0
		Class B
			- 65534 host addresses
			- mask 255.255.0.0
		Class C
			254 host addresses
			255.255.255.0

			If Comapny want to support 3000 hosts
				Class B (but it is too much)
				Class C (could use multiple part C addresses but it will have negative effect on routing tables)
		SOLUTION EX:
		255.255.255.240
		11111111.11111111.11111111.11110000
		28 binary 1's or  /28
		255.255.255.240 = /28

______
##08 Cisco IOS Software and Initial Device Configuration
		___
		049 Overview and Uses of Cisco IOS Software.mp4
			ex. CISCO IOS - nexus operating system (Nexys OS)
			CISCO IOS - most common network operating system

			Other OS - Catalyst OC (CatOC)
			CISCO IOS use:
				For routers
				For switches
				For Wireless Access Points

		___
		050 Physical connection to the Cisco router.mp4
			Conneting to a router (HyperTerminal, Putty, etc.)
			Real word: use CLI to configure
			MODES" dont type the righ command in the wrong mode
		___
		051 How to connect to a router_switch.mp4
			Connect router ro PC: 
				Needs cable DB9 to RJ45 (plius adapteriai perejimui)
			
		___
		052 Initial Startup.mp4
			make sure used console input'a

			Boots initial configuration catalog
			COMANDS:
				? - help in any place
		___
		053 Configuration of the router and Modes - User.mp4
			Modes:
				User Mode - LIMITED COMMANDS (ex. can not reload switch or router)
				Privilege Mode
				Globas Configuration Mode

			HyperTerminal:
			? - will see commands available
			show ? - additional options available
			show ve - shows version
			conf t (able to run in Privilage Mode)
			enable - will switch to Privilege mode

		___
		054 Modes - Enable_Privilege_ User EXEC_ Global Config.mp4
			enable - will switch to Privilege mode
			? - SHOW ALL AVAILABLE OPTION

			Global Config
			- with "#"
			- change glogal configuration:
				- hostname
				- etc

			Ex.: add text ehrn login to router, Hyper Terminal:
			#banner motd #
				This is such a ... network and you are not authorized to enter it without permision.
		___
		055 Modes - Interface.mp4
			- hostname (config-if)#
			- change interface configuration
				- IP address
				- enable/disable interface
		___
		056 Modes - Line and Router mode.mp4
		 - Hyper Terminal: line con
			Line mode used:
				- console - line console mode
				-vty - - for telnet or ssh switch
			Hyper Terminal: LOGIN
				- WILL REQUIRE TO ENTER  PASWORD BEFORE LOGIN

			Router mode
			Hyper Terminal: router rip

		___
		057 Help.mp4
			? - always help and show options available
			TAB - used for autocompletion
			show history - showa my used commands
		___
		058 Commands.mp4
		CTR+A - go to the beggining of line
		CTR+E - go to the END of line
		CTR+D - to delete
		___
		059 Commands (continuation) and Managing Cisco IOS Configuration.mp4
		< .... ??? .... >
		___
		060 Copy Running Config Startup Config.mp4
			< .... ??? .... >
		___
		061 Difference on the configuration.mp4
		< .... ??? .... >
		___
		062 Erase startup config.mp4
		< .... ??? .... >
		___
		063 TFTP Backup.mp4
		< .... ??? .... >
		___
		064 Managing Cisco IOS Configuration.mp4
		< .... ??? .... >
		___
		065 Storing files in Flash and Terminal Length.mp4
		< .... ??? .... >

_________________
#09 IP Subnetting
	___
	066 IP Subnetting Part 1.mp4
		METHOD 1 (Binary method)
		METHOD 2 (quick method)

		Example:
		PC1: 192.168.10.18/24 or 192.168.10.18 255.255.255.0
		Answer:
			- What IP address would router1 be configured with if it is to use the first IP address in some subnet as PC1?
			- What broadcast address is use by PC1?
			- What IP address would Router1 be configured with if it use the last IP address in the same subnet as PC?
			- What subnet is PC1 part of?
			______________
			BINARY METHOD:
				_______________________
				Network/SubNet Address:
					- Fill the host portion of on address with binary 0's
				__________________
				Broadcast address:
					- Fill the host portion of an address with binarys 1's
				___________
				First host:
					- Fill the host portion of an address with binary 0's EXCEPT the last bit which is set to binary 1
				__________
				Last host:
					- Fill the host portion of an address with binary 1's except for the last bit which set to binary 0's
			________
			EXAMPLE:
			192.168.1.18/24 OR 192.168.1.18 255.255.255.0
				192.168.1 - Network portion
				18 Host portion
			SUBNET 		192.168.1.1.00000000	=	192.168.1.0
			1st HOST 	192.168.1.1.00000001	=	192.168.1.1
			LAST HOST 	192.168.1.1.11111110	=	192.168.1.254
			BROADCAST 	192.168.1.1.11111111	=	192.168.1.255
	____
	067 IP Subnetting Part 2.mp4
		Quick EXAMPLE:
			USE Shortcut table ...???




 








****************************************************
13d. 67video
X   500video

100 d. dienų t.y. 4 mėn.
*****************************************************













	___
	066 IP Subnetting Part 2.mp4
	___
	066 IP Subnetting Part 3.mp4
	___
	066 IP Subnetting Part 4.mp4






























=====reapeat=====
SUBNET MASK MAIN PURPOSE AND HOW TO IDENTIFY NETWORK AND HOST PORTION
WHAT IS CIDER AND ITS N








	







===2019-01-09 iki [49]			
























	

 


VISO 543


