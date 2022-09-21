from colorama import Fore, Back, Style
import speech_recognition as sr
import moviepy.editor as me
import translators as ts
import colorama
import argparse


colorama.init()
def convert(path,lang):	
	try:
		video_clip = me.VideoFileClip(r"{}".format(path))
		video_clip.audio.write_audiofile(r"{}".format("converted_sound.wav"))
		recognizer =  sr.Recognizer()
		audio_clip = sr.AudioFile("{}".format("converted_sound.wav"))
		with audio_clip as source:
			audio_file = recognizer.record(source)
		print(Fore.GREEN)
		print("Please wait ...")
		result = recognizer.recognize_google(audio_file)
		converted_lang_text = ts.google(result, to_language = lang)
		print("\n==========")
		print(Fore.YELLOW)
		print(converted_lang_text)
		print("==========")
		with open("recognized.txt", 'w') as file:
			file.write(result)
			print(Fore.BLUE)
			print("Speech to text conversion successfull.")
	except Exception as e:
		print("Attempt failed -- ", e)

ap = argparse.ArgumentParser()
ap.add_argument("-p", "--path", required=True, help="Video path")
ap.add_argument("-tr", "--translate", required=True, help="What language do you translate, Ör: en")
args = vars(ap.parse_args())
path = args["path"]
translate = args["translate"]
convert(path,translate)
