import cv2
import cv2.cv as cv
import numpy
import zbar
import time
import threading

class BarCodeScanner(threading.Thread):
	def __init__(self, toscan):
		threading.Thread.__init__(self)
		self.CV_SYSTEM_CACHE_CNT = 5
		self.LOOP_INTERVAL_TIME = 0.2
		self.cam = cv2.VideoCapture(-1)
		self.data = []
		self.scanned = 0
		self.toscan = toscan

	def scan(self, aframe):
		imgray = cv2.cvtColor(aframe, cv2.COLOR_BGR2GRAY)
		raw = str(imgray.data)
		scanner = zbar.ImageScanner()
		scanner.parse_config("enable")
		width = int(self.cam.get(cv.CV_CAP_PROP_FRAME_WIDTH))
		height = int(self.cam.get(cv.CV_CAP_PROP_FRAME_HEIGHT))
		imageZbar = zbar.Image(width, height, "Y800", raw)
		scanner.scan(imageZbar)
		#print "Ende:", time.time()
		
		for symbol in imageZbar:
			#print "decoded", symbol.type, "symbol", "'%s'" % symbol.data
			#print "symbol.data:", symbol.data
			self.data.append(symbol.data)
			self.scanned = self.scanned + 1

	def run(self):
		while self.scanned < self.toscan:
			for i in range(0, self.CV_SYSTEM_CACHE_CNT):
				self.cam.read()
			img = self.cam.read()
			self.scan(img[1])
			cv.WaitKey(1)
			time.sleep(self.LOOP_INTERVAL_TIME)
		self.cam.release()
	
	def get_data(self):
		return self.data

#scanner = BarCodeScanner()
#scanner.start()
