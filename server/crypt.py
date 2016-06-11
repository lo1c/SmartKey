import sys
import time
import qr1
import copy

# Variables
print("DIESES SKRIPT IST DOOF! :c")
num=1
valid=0
indexToCh = [0,2,4,6,8,10,12]
key_value = 10
code = [6,6,6,6,6,6,6,6,6,6,6,6,6]

scanner = qr1.BarCodeScanner(num)
scanner.start()
while len(scanner.get_data()) < num:
	pass
print(scanner.get_data())
datas = scanner.get_data()
for data in datas:
	if data == datas[0]:
		valid += 1
	if valid == num:
		break
else:
	print("[ERROR] QR Code's are not right!")
	sys.exit()

def new_code(old_code,key_value):
	for i in indexToCh:
		old_code[i] += key_value
	return old_code

def generate_possible_codes(current_code,key_value,test_length=5):
	possible_codes = [current_code]
	for i in range(test_length):
		if len(possible_codes) == test_length:
			break
		possible_codes.append(copy.deepcopy(new_code(possible_codes[-1], key_value)))
		print(possible_codes)
	return possible_codes

def main():
	possible_codes = generate_possible_codes(code,key_value)

	print("Possible: ")
	print(possible_codes)
	for code in possible_codes:
		print(code)

if (__name__ == "__main__"):
	main()
