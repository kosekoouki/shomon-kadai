import math
for degree in range(0,361,15):
    rad = math.radians(degree)
    sin_val = math.sin(rad)
    cos_val = math.cos(rad)
    try:
        tan_val = math.tan(rad)
    except:
        tan_val = float('inf')
    print(f"{degree:3d}° | sin: {sin_val:.4f} | cos: {cos_val:.4f} | tan: ",end='')
    if abs(cos_val) < 1e-10:
        print("undefined")
    else:
        print(f"{tan_val:.4f}")

