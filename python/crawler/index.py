import requests

def fetchUrl(url):
    '''
    发起网络请求，获取网页源码
    '''
    headers = {
        'accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9 ',
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/6.2.4098.3 Safari/537.36',
        'cookie': 'xhsTrackerId=3c916261-a99f-4983-c9ca-2bd90d240ec3; timestamp2=20220228166dac80fdfca78d882fdaa8; timestamp2.sig=D4IzZG1wevh7i-kJvzHuFSUzMsyVNItzQ2fdgRkp8NE; extra_exp_ids=commentshow_exp1,gif_clt1,ques_exp2; xhsTracker=url=noteDetail&xhsshare=CopyLink',
    }

    r = requests.get(url, headers=headers)
    return r.text


def parsing_link(html):
    '''
    解析html文本，提取无水印图片的 url
    '''

    beginPos = html.find('imageList') + 11
    endPos = html.find(',"cover"')
    imageList = eval(html[beginPos: endPos])

    for i in imageList:
        picUrl = f"https://ci.xiaohongshu.com/{i['traceId']}"
        yield picUrl, i['traceId']


def download(url, filename):
    headers = {
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 UBrowser/6.2.4098.3 Safari/537.36',
    }

    with open(f'{filename}.jpg', 'wb') as v:
        try:
            r = requests.get(url, headers=headers)
            v.write(r.content)

        except Exception as e:
            print('图片下载错误！')


if __name__ == '__main__':
    original_link = 'https://www.xiaohongshu.com/discovery/item/621605cd000000002103ea09'
    html = fetchUrl(original_link)
    for url, traceId in parsing_link(html):
        print(f"download image {url}")
        download(url, traceId)

    print("Finished!")
