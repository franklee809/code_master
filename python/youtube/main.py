from pytube import Channel;
import os;

c = Channel('https://www.youtube.com/c/AppamadaVihari/playlists')

print(f'Downloading videos by: {c.channel_name}')

def displayLinks():
    for url in c.video_urls:
        print(url);

def downloadAsMp3():
    destination = '/Users/franklee/Downloads/youtube_videos';

    for video in c.videos:
        print(video.streams.filter(only_audio=True).first());
        # # download the file
        # out_file = video.download(output_path=destination)

        # # save the file
        # base, ext = os.path.splitext(out_file)
        # new_file = base + '.mp3'
        # os.rename(out_file, new_file)

        # # result of success
        # print(yt.title + " has been successfully downloaded.")
    return;


if __name__ == "__main__":
    # displayLinks();
    downloadAsMp3();